jQuery(document).ready(function($){
  //Intercom('showNewMessage', 'pre-populated content');
  var elementPosition = $('#nav-controls').offset();

  // This is a temporary hack
  // Adding a class to a field in Drupal seemed difficult
  $('.resource-tag a').addClass('tag');

  var options = {
    valueNames: [
      'title',
      'organization',
      'short-description',
      'tag'
    ]
  };

  var activeFilters = [];
  var resourceList = new List('business-resources', options);

  $('#clear-business-resources-search').click(function(){
    $('#search-block-form--3').val('')
    $('.filter').each(function(){
      if($(this).is(':checked')){
        $(this).click();
      }
    });
  });

  var updateResultCount = function(resultsLength){
    if(resultsLength === 1){
      $('#number-of-results').text(resultsLength + " resource.");
    } else {
      $('#number-of-results').text(resultsLength + " resources.");
    }
  }

  updateResultCount(resourceList.visibleItems.length);

  var scrollToNav = {
    lastScrollFireTime: 0,
    scroll: function(){
      var
      minScrollTime = 1000,
      scrollTimer = null,
      currentTime = new Date().getTime();

      if(scrollTimer === null){
        if(currentTime - scrollToNav.lastScrollFireTime > (3 * minScrollTime)){
          scrollToNav.lastScrollFireTime = currentTime;
          var navPosition = $("#nav-controls").offset().top - 200;
          $('html, body').animate({
            scrollTop: navPosition
          }, 1000);
        }

        scrollTimer = setTimeout(function(){
          scrollTimer = null;
          lastScrollFireTime = new Date().getTime();
        }, minScrollTime);
      }
    }
  }

  resourceList.on('updated', function(list) {
    updateResultCount(resourceList.visibleItems.length);
    scrollToNav.scroll();
    resourceList.matchingItems.length > 0 ? $('.no-result').hide() : $('.no-result').show();
  });

  function intersectTagsAndFilters(array1, array2){
    // Intesection is an array of values
    // that are both in the items tags, and the selected filters
    var intersection = array1.filter(function(n){
      return array2.indexOf(n) != -1 ? true : false;
    });

    // Check if there are the same number of matched values
    // as there are filters selected
    return intersection.length === array1.length ? true : false;

  }

  $('.filter').change(function(){
    var isChecked = this.checked;
    var value = $(this).data("value");

    // Add value to activeFilters, otherwise update the value.
    isChecked ? activeFilters.push(value) : activeFilters.splice(activeFilters.indexOf(value), 1);

    if(activeFilters.length > 0){
      $('.filter-list').empty();
      activeFilters.forEach(function(item){
        $('.filter-list').append('<li class="tag-list__item"><a class="tag-list__link filter-tag"><i class="icon-close"></i> ' + item + '</a></li>');
      });
      $('.filter-list').show();
    } else {
      $('.filter-list').hide();
      $('.filter-list').empty();
    }

    resourceList.filter(function(item){
      item.tags = [];
      $(item.elm).find('.tag').each(function(){
        item.tags.push($(this).text());
      })

      // If a filter is checked, see if it matches tags,
      // otherwise show all items (return true).
      if(activeFilters.length > 0){
        return intersectTagsAndFilters(activeFilters, item.tags, item);
      } else {
        return true;
      }
    });
  });

  // Remove tag and reset filter when tag is clicked
  $('.filter-list').on('click', '.filter-tag', function(){
    var target = $(this).text();
    $('.filter').each(function(){
      console.log('comparison ', $(this).data('value'), target);
      console.log('is equal ', String($(this).data('value').trim()) == String(target).trim())
      if($(this).is(':checked') && String($(this).data('value').trim()) == String(target).trim()){
        console.log('clicking');
        $(this).click();
      }
    });
    $(this).remove();
  })

}(jQuery));
