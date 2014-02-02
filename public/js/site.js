$(function(){
    $('#sidebar-nav').on('show.bs.tooltip', 'a', function(e) {
        if($(e.currentTarget).find('span:visible').length) {
            e.preventDefault();
            return false;
        }
    });

});

var fancyFilter = function(filterListSelector, gallerySelector) {
    //Filter Button Code
    $(filterListSelector + ' a').click(function() {
        $(filterListSelector + ' li').removeClass('active');
        var $this = $(this);
        var filterType = $this.data('filter');
        if(!filterType) return true;

        $this.closest('li').addClass('active');
        $(gallerySelector).isotope({ 
            filter: filterType,
        });

        return false;
    });
};



