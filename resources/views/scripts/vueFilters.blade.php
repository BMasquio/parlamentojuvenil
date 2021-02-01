<script>
//    Vue.transition('stagger', {
//        stagger: function (index) {
//            return Math.min(300, index * 50)
//        }
//    });

    Vue.filter('moreThanOneSchool', function (value)
    {
        if (vueAdminIndex.$data.filterSchools)
        {
            return value.filter(schoolGreaterThanOne);
        }

        return value;
    });

    Vue.filter('sort', function (value)
    {
        var sorter = function(a, b)
        {
            var va = (a === null) ? "" : "" + a,
                    vb = (b === null) ? "" : "" + b;

            return va > vb ? 1 : ( va === vb ? 0 : -1 );
        };

        if (vueAdminIndex.$data.orderType == 'reverse')
        {
            return value.reverse(sorter);
        }

        return value.sort(sorter);
    });
</script>
