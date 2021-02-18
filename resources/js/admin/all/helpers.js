window.schoolGreaterThanOne = function schoolGreaterThanOne(school) {
    return school.schoolcount > 1
}

window.startFetchSubscriptionsClock = function startFetchSubscriptionsClock() {
    vueAdminIndex.__fetchSubscriptions()
}

window.loadPusher = function loadPusher() {
    this.pusher = new Pusher('2c6e7075be562704023d')

    this.pusherChannel = this.pusher.subscribe('subscriptions')

    this.pusherChannel.bind('App\\Events\\SubscriptionWasUpdated', function (message) {
        vueAdminIndex.__fetchSubscriptions()
    })

    this.pusherChannel.bind('App\\Events\\SubscriptionWasCreated', function (message) {
        vueAdminIndex.__fetchSubscriptions()
        vueMap.__scheduleFetch()
    })
}

window.clone = function clone(obj) {
    if (null == obj || 'object' != typeof obj) return obj
    var copy = obj.constructor()
    for (var attr in obj) {
        if (obj.hasOwnProperty(attr)) copy[attr] = obj[attr]
    }
    return copy
}

window.isEmpty = function isEmpty(obj) {
    return Object.keys(obj).length == 0
}

if (!String.format) {
    String.format = function (format) {
        var args = Array.prototype.slice.call(arguments, 1)
        return format.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] != 'undefined' ? args[number] : match
        })
    }
}
