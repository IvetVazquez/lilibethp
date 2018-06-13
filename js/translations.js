// Variables 
var lang = window.location.pathname.split("/")[1], // Check the URL language
    translate; // Container of all translations

// Call translations json file and populate translate variable  
$.getJSON("js/translations.json", function(texts) {
    translate = texts;

    // Translations Function: Get all the element with data-text
    $("[data-translate]").each(function() {
        var text = $(this).attr('data-translate'), // Save the Text into the variable
            element =  $('[data-translate="' + text + '"]'),
            postHTML;
        
        console.log("text", text);

        if (translate[text] !== undefined) { // Check if exist the text in translation.json
            
            console.log("translate[text]", translate[text]);

            if (translate[text][lang] !== undefined) { // Check if exist the text in the browser language
                postHTML = translate[text][lang];
            }

            element.html(postHTML);

        } else {
            $('[data-translate="'+text+'"]').html("ERR").css({'color':'red','font-weight':'bold'});
        }
    });
});
