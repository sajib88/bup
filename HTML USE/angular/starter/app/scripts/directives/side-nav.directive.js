
angular.module('app')
	.directive('sidebar', function() {
        return {
            restrict: 'E',
            link: function(scope, element, attrs) {
                $('.side-nav .side-nav-menu li a').click(function(event) {
					if ($(this).parent().hasClass("open")) {

						$(this).parent().children('.dropdown-menu').slideUp(200, function() {
							$(this).parent().removeClass("open");
						});

					} else {
						$(this).parent().parent().children('li.open').children('.dropdown-menu').slideUp(200);
						$(this).parent().parent().children('li.open').children('a').removeClass('open');
						$(this).parent().parent().children('li.open').removeClass("open");
						$(this).parent().children('.dropdown-menu').slideDown(200, function() {
							$(this).parent().addClass("open");
						});
					}
				});
            }
        }	
    });
