<script src="{{ url('/assets/js/jquery-3.7.1.js') }}"></script>
{{--    <script src="{{ url('/assets/js/slick.min.js') }}"></script>--}}
{{--    <script src="{{ url('/assets/js/scrollreveal.js') }}"></script>--}}
    <script src="{{ url('/assets/js/bootstrap.bundle.min.js') }}"></script>
{{--    <script src="{{ url('/assets/js/countUp.min.js') }}"></script>--}}
{{--    <script src="{{ url('/assets/js/waypoints.min.js') }}"></script>--}}
{{--    <script src="{{ url('/assets/js/phosphor-icons.js') }}"></script>--}}
    <script src="{{ url('/assets/js/main.min.js') }}"></script>
    <script>
$(document).ready(function(){

    $('.popover-trigger').popover({
        trigger: 'manual',
        html: true,
        container: 'body' // This helps manage positioning and overflow issues
    }).on('click', function(e) {
        // Close all other popovers and open this one
        $('.popover-trigger').not(this).popover('hide');
        $(this).popover('toggle');
        e.stopPropagation(); // Prevent event from bubbling up
    });
});

$(document).on('click', function(e) {
    if ($(e.target).data('bs-toggle') !== 'popover'
        && $(e.target).parents('.popover').length === 0) {
        $('.popover-trigger').popover('hide');
    }
});
$(function () {
        $('[data-toggle="popover"]').popover()
})
</script>
    <script>
      // $(function () {
      //   $('[data-toggle="tooltip"]').tooltip()
      // })
      $(document).ready(function() {
        $('.see-more-button').on('click',function(){
          // alert($(this).data('tot'));
          var btnid=$(this).data('testid');
          $('.tr'+btnid).css("display", "");
          $('#bm'+btnid).addClass('d-none');
          $('#bl'+btnid).removeClass('d-none')
          $('#c'+btnid).text($(this).data('tot'));
        });

        // Handle click event
        $('#searchInput').on('click', function () {
            // Set the placeholder to an empty string
            $(this).attr('placeholder', '');
        });

        // Handle input change event
        $('#searchInput').on('input', function () {
            // Check the length of the input
            if ($(this).val().length === 0) {
                // If length is 0, set the placeholder to Enter Letter
                $(this).attr('placeholder', '{{  __('frontend.Enter_Letters') }}');
            }
        });

        // Handle blur event
        $('#searchInput').on('blur', function () {
            // Check the length of the input
            if ($(this).val().length === 0) {
                // If length is 0, set the placeholder again with the text
                $(this).attr('placeholder', '{{  __('frontend.Enter_Letters') }}');
            }
        });


        $('.see-less-button').on('click',function(){
          var btnid=$(this).data('testid');
          $('.tr'+btnid).css("display", "none");
          $('#bl'+btnid).addClass('d-none');
          $('#bm'+btnid).removeClass('d-none')
          $('#c'+btnid).text('10');
        })
    $('.turkish-english-input').on('input', function() {
        var inputVal = $(this).val();

        // Regular expression to match both Turkish and English letters
        var regex = /^[abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ]*$/;

        // Filter out characters that are not Turkish or English letters
        var filteredVal = '';
        for (var i = 0; i < inputVal.length; i++) {
            var char = inputVal[i];
            if (regex.test(char)) {
                filteredVal += char;
            }
        }

        // Trim the input to a maximum length of 10 characters
        $(this).val(filteredVal.substring(0, 10));
    });
});


  $(document).ready(function() {
    $('#searchcInput').on('input', function() {

        // Replace spaces with '?'
        var inputVal = $(this).val().replace(/\s/g, '?');

        // Regular expression to match Turkish and English letters and '?'
        var regex = /^[a-zA-ZçÇğĞıİöÖşŞüÜ?]*$/;

        // Check if the input matches the regex and does not exceed 15 characters
        if (regex.test(inputVal) && inputVal.length <= 15) {
            // Count the number of '?'
            var questionMarkCount = (inputVal.match(/\?/g) || []).length;
            if (questionMarkCount <= 3) {
                // Valid input, set the value
                $(this).val(inputVal);
            } else {
                // More than 3 '?', trim the excess
                $(this).val(inputVal.slice(0, inputVal.lastIndexOf('?')));
            }
        } else {
            // Invalid input, remove the last character
            $(this).val(inputVal.slice(0, -1));
        }
    });

    $('#lengthInput').on('input', function() {
    // Replace any non-digit characters and limit to two digits
    this.value = this.value.replace(/[^\d]/g, '').substring(0, 2);
});
$('#searchInput').on('invalid', function() {
    this.setCustomValidity('Please enter at least two digits');
});

$('#searchInput').on('input', function() {
    // Clear the custom validity message when the user modifies the input
    this.setCustomValidity('');
});
$('#resetButton').on('click', function() {
    $('#myform input[type="search"]').val('');
    $('#searchInput').attr('value','');
    $('#startInput').attr('value','');
    $('#endInput').attr('value','');
    $('#containInput').attr('value','');
    $('#lengthInput').attr('value','');
    $('#searchButton').attr('disabled',true);
    $('#searchButtonIcon').attr('disabled',true);
});


$("input").on('input',function(){
    var si=$('#searchInput').val();
    var sti=$('#startInput').val();
    var ei=$('#endInput').val();
    var ci=$('#containInput').val();
    var li=$('#lengthInput').val();

    if(si.length>1 || sti.length>0 || ei.length>0 || ci.length>0 || li.length>0 ){
        $('#searchButton').attr('disabled',false);
        $('#searchButtonIcon').attr('disabled',false);
    }else{
        $('#searchButton').attr('disabled',true);
        $('#searchButtonIcon').attr('disabled',true);
    }
});

var si=$('#searchInput').val();
    var sti=$('#startInput').val();
    var ei=$('#endInput').val();
    var ci=$('#containInput').val();

    if(si.length>1 || sti.length>0 || ei.length>0 || ci.length>0 ){
        $('#searchButton').attr('disabled',false);
        $('#searchButtonIcon').attr('disabled',false);
    }else{
        $('#searchButton').attr('disabled',true);
        $('#searchButtonIcon').attr('disabled',true);
    }

});

$(document).ready(function() {
    $('#searchInput').on('input', function() {
    var inputVal = $(this).val();
    var newInputVal = '';
    var questionMarkCount = 0;

    for (var i = 0; i < inputVal.length; i++) {
        if (newInputVal.length >= 15) {
            break; // Stop processing if max length is reached
        }

        var char = inputVal[i];
        if (char === ' ') {
            char = '?';
        }

        if (/^[abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ?]$/.test(char)) {
            if (char === '?') {
                if (questionMarkCount < 3) {
                    newInputVal += char;
                    questionMarkCount++;
                }
            } else {
                newInputVal += char;
            }
        }
    }

    $(this).val(newInputVal);
});

});

//       var myModal = document.getElementById('exampleModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })
    </script>
<script>
    $(document).ready(function() {
        // Handle click event
        $('#searchInputModal').on('click', function () {
            // Set the placeholder to an empty string
            $(this).attr('placeholder', '');
        });

        // Handle input change event
        $('#searchInputModal').on('input', function () {
            // Check the length of the input
            if ($(this).val().length === 0) {
                // If length is 0, set the placeholder to Enter Letter
                $(this).attr('placeholder', '{{  __('frontend.Enter_Letters') }}');
            }
        });

        // Handle blur event
        $('#searchInputModal').on('blur', function () {
            // Check the length of the input
            if ($(this).val().length === 0) {
                // If length is 0, set the placeholder again with the text
                $(this).attr('placeholder', '{{  __('frontend.Enter_Letters') }}');
            }
        });


        $('.see-less-button').on('click',function(){
            var btnid=$(this).data('testid');
            $('.tr'+btnid).css("display", "none");
            $('#bl'+btnid).addClass('d-none');
            $('#bm'+btnid).removeClass('d-none')
            $('#c'+btnid).text('10');
        })
        $('.turkish-english-input').on('input', function() {
            var inputVal = $(this).val();

            // Regular expression to match both Turkish and English letters
            var regex = /^[abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ]*$/;

            // Filter out characters that are not Turkish or English letters
            var filteredVal = '';
            for (var i = 0; i < inputVal.length; i++) {
                var char = inputVal[i];
                if (regex.test(char)) {
                    filteredVal += char;
                }
            }

            // Trim the input to a maximum length of 10 characters
            $(this).val(filteredVal.substring(0, 10));
        });
    });
    $(document).ready(function() {
        $('#searchcInput').on('input', function() {

            // Replace spaces with '?'
            var inputVal = $(this).val().replace(/\s/g, '?');

            // Regular expression to match Turkish and English letters and '?'
            var regex = /^[a-zA-ZçÇğĞıİöÖşŞüÜ?]*$/;

            // Check if the input matches the regex and does not exceed 15 characters
            if (regex.test(inputVal) && inputVal.length <= 15) {
                // Count the number of '?'
                var questionMarkCount = (inputVal.match(/\?/g) || []).length;
                if (questionMarkCount <= 3) {
                    // Valid input, set the value
                    $(this).val(inputVal);
                } else {
                    // More than 3 '?', trim the excess
                    $(this).val(inputVal.slice(0, inputVal.lastIndexOf('?')));
                }
            } else {
                // Invalid input, remove the last character
                $(this).val(inputVal.slice(0, -1));
            }
        });

        $('#lengthInputModal').on('input', function() {
            // Replace any non-digit characters and limit to two digits
            this.value = this.value.replace(/[^\d]/g, '').substring(0, 2);
        });
        $('#searchInputModal').on('invalid', function() {
            this.setCustomValidity('Please enter at least two digits');
        });

        $('#searchInputModal').on('input', function() {
            // Clear the custom validity message when the user modifies the input
            this.setCustomValidity('');
        });
        $('#resetButtonModal').on('click', function() {
            $('#myformModal input[type="search"]').val('');
            $('#searchInputModal').attr('value','');
            $('#startInputModal').attr('value','');
            $('#endInputModal').attr('value','');
            $('#containInputModal').attr('value','');
            $('#lengthInputModal').attr('value','');
            $('#searchButtonModal').attr('disabled',true);
        });


        $("input").on('input',function(){
            var si=$('#searchInputModal').val();
            var sti=$('#startInputModal').val();
            var ei=$('#endInputModal').val();
            var ci=$('#containInputModal').val();
            var li=$('#lengthInputModal').val();
            if(si && si.length>1 || sti && sti.length>0 || ei && ei.length>0 || ci && ci.length>0 || li &&li.length>0 ){
                $('#searchButtonModal').attr('disabled',false);
            }else{
                $('#searchButtonModal').attr('disabled',true);
            }
        });

        var si=$('#searchInputModal').val();
        var sti=$('#startInputModal').val();
        var ei=$('#endInputModal').val();
        var ci=$('#containInputModal').val();
        if(si && si.length>1 || sti && sti.length>0 || ei && ei.length>0 || ci && ci.length>0 ){
            $('#searchButtonModal').attr('disabled',false);
        }else{
            $('#searchButtonModal').attr('disabled',true);
        }

    });
    $(document).ready(function() {
        $('#searchInputModal').on('input', function() {
            var inputVal = $(this).val();
            var newInputVal = '';
            var questionMarkCount = 0;

            for (var i = 0; i < inputVal.length; i++) {
                if (newInputVal.length >= 15) {
                    break; // Stop processing if max length is reached
                }

                var char = inputVal[i];
                if (char === ' ') {
                    char = '?';
                }

                if (/^[abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ?]$/.test(char)) {
                    if (char === '?') {
                        if (questionMarkCount < 3) {
                            newInputVal += char;
                            questionMarkCount++;
                        }
                    } else {
                        newInputVal += char;
                    }
                }
            }

            $(this).val(newInputVal);
        });

    });
</script>
