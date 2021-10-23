$(document)
    .ready(function() {

        // FIX MENU WHEN PASSED
        $('.masthead')
            .visibility({
                once: false,
                onBottomPassed: function() {
                    $('.fixed.menu').transition('fade in');
                },
                onBottomPassedReverse: function() {
                    $('.fixed.menu').transition('fade out');
                }
            })
        ;

        // CREATE SIDEBAR AND ATTACH TO MENU OPEN
        $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
        ;

        // PROJECT DIMMER
        $('.ui.project.fluid.image')
            .dimmer({
                on: 'hover'
            })
        ;
    })
;
