function displayShippingDate()
{
	console.log($("#freeshipping").length)
	console.log($("#rushdelivery").length)
	var today = new Date();
    $("#freeshipping").html(dateformat(getDeliveryDateObj(today,9)));
    var todayp = new Date();
    $("#freeshippingquote").html(dateformat(getDeliveryDateObj(todayp,9)));
    var today = new Date();
    $("#rushdelivery").html(dateformat(getDeliveryDateObj(today,5)));
}
var dateFormat = function () {
    var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
        timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
        timezoneClip = /[^-+\dA-Z]/g,
        pad = function (val, len) {
            val = String(val);
            len = len || 2;
            while (val.length < len) val = "0" + val;
            return val;
        };

    // Regexes and supporting functions are cached through closure
    return function (date, mask, utc) {
        var dF = dateFormat;

        // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
        if (arguments.length == 1 && Object.prototype.toString.call(date) == "[object String]" && !/\d/.test(date)) {
            mask = date;
            date = undefined;
        }

        // Passing date through Date applies Date.parse, if necessary
        date = date ? new Date(date) : new Date;
        if (isNaN(date)) throw SyntaxError("invalid date");

        mask = String(dF.masks[mask] || mask || dF.masks["default"]);

        // Allow setting the utc argument via the mask
        if (mask.slice(0, 4) == "UTC:") {
            mask = mask.slice(4);
            utc = true;
        }

        var _ = utc ? "getUTC" : "get",
            d = date[_ + "Date"](),
            D = date[_ + "Day"](),
            m = date[_ + "Month"](),
            y = date[_ + "FullYear"](),
            H = date[_ + "Hours"](),
            M = date[_ + "Minutes"](),
            s = date[_ + "Seconds"](),
            L = date[_ + "Milliseconds"](),
            o = utc ? 0 : date.getTimezoneOffset(),
            flags = {
                d:    d,
                dd:   pad(d),
                ddd:  dF.i18n.dayNames[D],
                dddd: dF.i18n.dayNames[D + 7],
                m:    m + 1,
                mm:   pad(m + 1),
                mmm:  dF.i18n.monthNames[m],
                mmmm: dF.i18n.monthNames[m + 12],
                yy:   String(y).slice(2),
                yyyy: y,
                h:    H % 12 || 12,
                hh:   pad(H % 12 || 12),
                H:    H,
                HH:   pad(H),
                M:    M,
                MM:   pad(M),
                s:    s,
                ss:   pad(s),
                l:    pad(L, 3),
                L:    pad(L > 99 ? Math.round(L / 10) : L),
                t:    H < 12 ? "a"  : "p",
                tt:   H < 12 ? "am" : "pm",
                T:    H < 12 ? "A"  : "P",
                TT:   H < 12 ? "AM" : "PM",
                Z:    utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                o:    (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                S:    ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 != 10) * d % 10]
            };

        return mask.replace(token, function ($0) {
            return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
        });
    };
}();
// Some common format strings
dateFormat.masks = {
    "default":      "ddd mmm dd yyyy HH:MM:ss",
    shortDate:      "m/d/yy",
    mediumDate:     "mmm d, yyyy",
    longDate:       "mmmm d, yyyy",
    fullDate:       "dddd, mmmm d, yyyy",
    shortTime:      "h:MM TT",
    mediumTime:     "h:MM:ss TT",
    longTime:       "h:MM:ss TT Z",
    isoDate:        "yyyy-mm-dd",
    isoTime:        "HH:MM:ss",
    isoDateTime:    "yyyy-mm-dd'T'HH:MM:ss",
    isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
};

// Internationalization strings
dateFormat.i18n = {
    dayNames: [
        "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat",
        "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
    ],
    monthNames: [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec",
        "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
    ]
};

// For convenience...
Date.prototype.format = function (mask, utc) {
    return dateFormat(this, mask, utc);
};

function getDeliveryDateObj(pday,businessDaysLeftForDelivery) {

    var deliveryDate = pday;
    var dayOfTheWeek = deliveryDate.getDay();
    var calendarDays = businessDaysLeftForDelivery;
    var deliveryDay = dayOfTheWeek + businessDaysLeftForDelivery;
    if (deliveryDay >= 6)
    {
      businessDaysLeftForDelivery -= 6 - dayOfTheWeek;  //deduct this-week days
      calendarDays += 2;  //count this coming weekend
      deliveryWeeks = Math.floor(businessDaysLeftForDelivery / 5); //how many whole weeks?
      calendarDays += deliveryWeeks * 2;  //two days per weekend per week
    }
    deliveryDate.setTime(deliveryDate.getTime() + calendarDays * 24 * 60 * 60 * 1000);

     //making sure deliveryDate isn't on a federal holiday
      var newYears = new Date(2010,0,1);
     var independenceDay = new Date(2010,6,4);
     var VETRANS_DAY = new Date(2010, 10, 11);
     var christmas = new Date(2010, 11, 25);
     //this is a current date to reference
     var c = new Date();
     //finding mlk day
     var mlk = new Date(c.getFullYear(), 0, 1);
    var day = mlk.getDay();
    var target = 1;
    var diff = target - day;
    day = diff + 14 + 1;
    mlk.setDate(day);
    //finding Washington's birthday
    var washington = new Date(c.getFullYear(),1,1);
    day = washington.getDay();
    target = 1;
    diff = target - day;
    day = diff + 21 + 1;
    washington.setDate(day);
    //finding Memorial Day
    var memorial = new Date(c.getFullYear(),5,0);
    day = memorial.getDay();
    target = 1;
    if(day > target)
    {
      diff = target - day;
      day = 31 + diff;
      memorial.setDate(day);
    }
    else if(day < target)
    {
      memorial.setDate(memorial.getDate() - 6);
    }
    //finding Labor Day
    var labor = new Date(c.getFullYear(), 8 , 1);
    day = labor.getDay();
    target = 1;
    if ( day >  target )
    {
      diff = day - target;
      day = 7 - diff;
      labor.setDate(day + 1); //adding 1 because day is zero based and the date isn't
    }
    else if( day < target )
    {
      day++;
      labor.setDate(day);
    }
    //finding Columbus Day
    var columbus = new Date(c.getFullYear(),9,1);
    day = columbus.getDay();
    target = 1;
    if(day > target)
    {
      diff = day - target;
      day = 7 - diff;
      day = day + 7;
    }
    else if( day < target )
    {
      day = day + 1 + 7;
    }
    else
    {
      day += 7;
    }
    columbus.setDate(day+1);
    //finding thanksgiving
    var thanksgiving = new Date(c.getFullYear(), 10 , 1);
    day = thanksgiving.getDay();
    target = 4;
    diff = target - day;
    day = diff + 21 + 1;
    thanksgiving.setDate(day);

    if(newYears.getMonth() == deliveryDate.getMonth() && newYears.getDate() == deliveryDate.getDate() ||
      independenceDay.getMonth() == deliveryDate.getMonth() && independenceDay.getDate() == deliveryDate.getDate() ||
      VETRANS_DAY.getMonth() == deliveryDate.getMonth() && VETRANS_DAY.getDate() == deliveryDate.getDate() ||
      christmas.getMonth() == deliveryDate.getMonth() && christmas.getDate() == deliveryDate.getDate() ||
      mlk.getMonth() == deliveryDate.getMonth() && mlk.getDate() == deliveryDate.getDate() ||
      washington.getMonth() == deliveryDate.getMonth() && washington.getDate() == deliveryDate.getDate() ||
      memorial.getMonth() == deliveryDate.getMonth() && memorial.getDate() == deliveryDate.getDate() ||
      labor.getMonth() == deliveryDate.getMonth() && labor.getDate() == deliveryDate.getDate() ||
      columbus.getMonth() == deliveryDate.getMonth() && columbus.getDate() == deliveryDate.getDate() ||
      thanksgiving.getMonth() == deliveryDate.getMonth() && thanksgiving.getDate() == deliveryDate.getDate() )
    {
       deliveryDate.setDate(getDeliveryDateObj(deliveryDate,1).getDate());
    }
    return deliveryDate;
  }

  function dateformat(deliveryDate)
  {
    var day = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var month = ['Janurary','Feburary','March','April','May','June','July','August','September','October','November','December'];
    return day[deliveryDate.getDay()] + ", " + month[deliveryDate.getMonth()] + " " + deliveryDate.getDate();
  }

  var dateFormat = function () {
    var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
        timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
        timezoneClip = /[^-+\dA-Z]/g,
        pad = function (val, len) {
            val = String(val);
            len = len || 2;
            while (val.length < len) val = "0" + val;
            return val;
        };

    // Regexes and supporting functions are cached through closure
    return function (date, mask, utc) {
        var dF = dateFormat;

        // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
        if (arguments.length == 1 && Object.prototype.toString.call(date) == "[object String]" && !/\d/.test(date)) {
            mask = date;
            date = undefined;
        }

        // Passing date through Date applies Date.parse, if necessary
        date = date ? new Date(date) : new Date;
        if (isNaN(date)) throw SyntaxError("invalid date");

        mask = String(dF.masks[mask] || mask || dF.masks["default"]);

        // Allow setting the utc argument via the mask
        if (mask.slice(0, 4) == "UTC:") {
            mask = mask.slice(4);
            utc = true;
        }

        var _ = utc ? "getUTC" : "get",
            d = date[_ + "Date"](),
            D = date[_ + "Day"](),
            m = date[_ + "Month"](),
            y = date[_ + "FullYear"](),
            H = date[_ + "Hours"](),
            M = date[_ + "Minutes"](),
            s = date[_ + "Seconds"](),
            L = date[_ + "Milliseconds"](),
            o = utc ? 0 : date.getTimezoneOffset(),
            flags = {
                d:    d,
                dd:   pad(d),
                ddd:  dF.i18n.dayNames[D],
                dddd: dF.i18n.dayNames[D + 7],
                m:    m + 1,
                mm:   pad(m + 1),
                mmm:  dF.i18n.monthNames[m],
                mmmm: dF.i18n.monthNames[m + 12],
                yy:   String(y).slice(2),
                yyyy: y,
                h:    H % 12 || 12,
                hh:   pad(H % 12 || 12),
                H:    H,
                HH:   pad(H),
                M:    M,
                MM:   pad(M),
                s:    s,
                ss:   pad(s),
                l:    pad(L, 3),
                L:    pad(L > 99 ? Math.round(L / 10) : L),
                t:    H < 12 ? "a"  : "p",
                tt:   H < 12 ? "am" : "pm",
                T:    H < 12 ? "A"  : "P",
                TT:   H < 12 ? "AM" : "PM",
                Z:    utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                o:    (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                S:    ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 != 10) * d % 10]
            };

        return mask.replace(token, function ($0) {
            return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
        });
    };
}();