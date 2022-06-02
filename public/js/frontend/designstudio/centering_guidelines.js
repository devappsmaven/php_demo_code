/**
 * Augments canvas by assigning to `onObjectMove` and `onAfterRender`.
 * This kind of sucks because other code using those methods will stop functioning.
 * Need to fix it by replacing callbacks with pub/sub kind of subscription model.
 * (or maybe use existing fabric.util.fire/observe (if it won't be too slow))
 */
function initCenteringGuidelines(canvas) {
  var canvasWidth = canvas.getWidth(),
      canvasHeight = canvas.getHeight(),
      canvasWidthCenter = canvasWidth / 2,
      canvasHeightCenter = canvasHeight / 2,
      canvasWidthCenterMap = { },
      canvasHeightCenterMap = { },
      centerLineMargin = 4,
      centerLineColor = 'rgba(79,193,240,0.3)',
      centerLineWidth = 2,
      ctx = canvas.getSelectionContext(),
      isYouthAndLeftChest = false,
      side = canvas.lowerCanvasEl.id,
      viewportTransform;
      
  for (var i = canvasWidthCenter - centerLineMargin, len = canvasWidthCenter + centerLineMargin; i <= len; i++) {
    canvasWidthCenterMap[Math.round(i)] = true;
  }
  for (var i = canvasHeightCenter - centerLineMargin, len = canvasHeightCenter + centerLineMargin; i <= len; i++) {
    canvasHeightCenterMap[Math.round(i)] = true;
  }

  function showVerticalCenterLine() 
  {
  	var lasti= 0;
  	for(var i= 10; i< canvasHeight; i+=10)
  	{
  		showCenterLine(canvasWidthCenter + 0.5, lasti, canvasWidthCenter + 0.5, i-5);
  	  	lasti = i;
  	}
  }

  function showHorizontalCenterLine() 
  {
  	var lasti= 0;
  	for(var i= 10; i< canvasWidth; i+=10)
  	{
  		showCenterLine(lasti, canvasHeightCenter + 0.5, i-5, canvasHeightCenter + 0.5);
  	  	lasti = i;
  	}
  }

  function showCenterLine(x1, y1, x2, y2) {
    ctx.save();
    ctx.strokeStyle = centerLineColor;
    ctx.lineWidth = centerLineWidth;
    ctx.beginPath();
    ctx.moveTo(x1 * viewportTransform[0], y1 * viewportTransform[3]);
    ctx.lineTo(x2 * viewportTransform[0], y2 * viewportTransform[3]);
    ctx.stroke();
    ctx.restore();
  }

  function showBorders(x, y, w, h,text) {
    ctx.save();
    ctx.strokeStyle = centerLineColor;
    ctx.lineWidth = centerLineWidth;
    ctx.beginPath();
    ctx.rect(x, y, w, h);
    ctx.font = "10pt Arial";
    ctx.fillText(text, x, y+10);
    ctx.stroke();    
    ctx.restore();
  }

  var afterRenderActions = [],
      isInVerticalCenter,
      isInHorizontalCenter;

  canvas.on('mouse:down', function (e) {
    viewportTransform = canvas.viewportTransform;
    if (e.target != undefined)
        isYouthAndLeftChest = true;
  });

  canvas.on('object:moving', function(e) {
    var object = e.target,
        objectCenter = object.getCenterPoint(),
        transform = canvas._currentTransform;

    if (!transform) return;
 
    isInVerticalCenter = Math.round(objectCenter.x) in canvasWidthCenterMap,
    isInHorizontalCenter = Math.round(objectCenter.y) in canvasHeightCenterMap;

    if (isInHorizontalCenter || isInVerticalCenter) {
      object.setPositionByOrigin(new fabric.Point((isInVerticalCenter ? canvasWidthCenter : objectCenter.x), (isInHorizontalCenter ? canvasHeightCenter : objectCenter.y)), 'center', 'center');
    }
  });

  canvas.on('before:render', function() {
    canvas.clearContext(canvas.contextTop);
  });

  canvas.on('after:render', function(e) {
     canvas.clearContext(canvas.contextTop);
     
    if (isInVerticalCenter && canvas.getActiveObject() != null) {
      showVerticalCenterLine(); 
    }
    
    if (isInHorizontalCenter && canvas.getActiveObject() != null) {
      showHorizontalCenterLine();
    }

    if (isYouthAndLeftChest && canvas.getActiveObject() != null)
    {
      product.printareas.forEach(printarea => {
        if(printarea.side == canvas.side)
        {
          //showBorders(0, 0, canvasWidth, canvasHeight,''); 
          if(printarea.guidelinesadult)
          {
            showBorders(0, 0, canvasWidth, canvasHeight,'Adult'); 
          }
          if(printarea.guidelinesyouth)
          {
            showBorders((canvasWidth*1)/12, (canvasHeight*1/2)/16, (canvasWidth*10)/12, (canvasHeight*12)/16,'Youth') ;
          }
          if(printarea.guidelinesleftchest)
          {
            showBorders(canvasWidth-((canvasWidth*1)/12)-((canvasWidth*4)/12), ((canvasHeight*1)/16), (canvasWidth*4)/12, (canvasWidth*4)/12,'Left Chest') ;
          }
        }
      });
    }

  });

  canvas.on('mouse:up', function(e) {
     if (e.target != 'undefined')
       isYouthAndLeftChest = false;
    // clear these values, to stop drawing guidelines once mouse is up
    isInVerticalCenter = isInHorizontalCenter = null;
    canvas.renderAll();

  });
}