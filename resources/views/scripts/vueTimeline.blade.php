<script>
    if (jQuery("#timeline").length)
    {
        var vueTimeline = new Vue({
            el: '#timeline',

            data:
            {
                year: 2016,
                address: null,
                timeline: null,
                now: null,
                timeOffset: 0,
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0,
            },

            methods:
            {
                __nowW3c: function () {
                    return Date.parse(new Date().toUTCString());
                },

                __calculateTimeOffset: function (now)
                {
                    var serverTimeMillisGMT = Date.parse(new Date(now).toUTCString());
                    var localMillisUTC = this.__nowW3c();

                    this.timeOffset = serverTimeMillisGMT -  localMillisUTC;
                },

                __findNextEvent: function ()
                {
                    var now = this.__nowW3c();
                    var selected = false;

                    this.timeline.forEach(function(object, index)
                    {
                        var startDate = Date.parse(new Date(object.startW3c).toUTCString());
                        object.selected = false;

                        if (startDate >= now && ! selected)
                        {
                            object.selected = true;
                            this.timeline.$set(index, object);
                            selected = true;
                        }
                    }.bind(this));
                },

                __findSelectedEvent: function ()
                {
                    var selected = null;
                    var elements = this.timeline;

                    elements.forEach(function(object)
                    {
                        if (object.selected)
                        {
                            selected = object;
                        }
                    }.bind(this));

                    this.$set('timeline', elements);

                    return selected;
                },

                __displayTimer: function ()
                {
                    var event = this.__findSelectedEvent();

                    var eventStart = Date.parse(new Date(event.startW3c).toUTCString());
                    var now = this.__nowW3c();

                    this.seconds = (eventStart + this.timeOffset - now) / 1000;

                    this.days = Math.floor(this.seconds / (60 * 60 * 24)); //calculate the number of days
                    this.seconds -= this.days * 60 * 60 * 24; //update the seconds variable with no. of days removed

                    this.hours = Math.floor(this.seconds / (60 * 60));
                    this.seconds -= this.hours * 60 * 60; //update the seconds variable with no. of hours removed

                    this.minutes = Math.floor(this.seconds / 60);
                    this.seconds -= this.minutes * 60; //update the seconds variable with no. of minutes removed
                },

                __updateTimer: function ()
                {
                    setTimeout(function ()
                    {
                        this.__updateTimer();
                    }.bind(this), 1000)

                    if (! this.timeline)
                    {
                        return false;
                    }

                    this.__findNextEvent();

                    this.$nextTick(function ()
                    {
                        this.__displayTimer();
                    }.bind(this))
                },

                __fetchTimeline: function()
                {
                    if (this.year)
                    {
                        this.$http.get('/api/v1/timeline/' + this.year).then(
                            function(response)
                            {
                                this.timeline = response.body.lines;

                                this.now = response.body.now;

                                this.__calculateTimeOffset(response.body.now);
                            }.bind(this),

                            this.__requestError
                        );
                    }
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },

                __isCurrentCountdownEvent: function(item)
                {
                    var event = this.__findSelectedEvent();

                    if (event && typeof event !== 'undefined')
                    {
                        return item.start == event.start && item.end == event.end;
                    }
                },
            },

            mounted: function()
            {
                this.__fetchTimeline();
                this.__updateTimer();
            },
        });
    }
</script>
