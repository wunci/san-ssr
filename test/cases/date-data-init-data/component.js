// date init data
const san = require('san')
const MyComponent = san.defineComponent({
    filters: {
        year: function (date) {
            return date.getFullYear()
        }
    },
    template: '<div>' +
        '<b title="{{date|year}}">{{date|year}}</b>' +
        '</div>',

    initData: function () {
        return {
            date: new Date(1983, 8, 3)
        }
    }
})

exports = module.exports = MyComponent