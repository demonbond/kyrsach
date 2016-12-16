window.addEvents({
    'domready': function(){
        /* thumbnails example , div containers */
        new SlideItMoo({
            overallContainer: 'SlideItMoo_outer',
            elementScrolled: 'SlideItMoo_inner',
            thumbsContainer: 'SlideItMoo_items',
            itemsVisible: 5,
            elemsSlide: 2,
            duration: 200,
            itemsSelector: '.SlideItMoo_element',
            itemWidth: 171,
            showControls:1});
    },

});

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}