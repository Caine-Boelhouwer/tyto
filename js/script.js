// Load the function init when DOM is ready
$(document).on('ready', init);

function init() {
  $('input#location-input').autocomplete({
    data: {
      "Rotterdam": null,
      "Den Haag": null,
      "Amsterdam": null,
      "Utrecht": null,
      "Eindhoven": null,
      "Groningen": null
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });

  $('input#branche-input').autocomplete({
    data: {
      "Kleding": null,
      "Bloemen": null,
      "Wonen": null,
      "Verzorging": null,
      "Sport": null,
      "Voedsel": null
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });

  $('select').material_select();

  $('.carousel').carousel();

  $('.tap-target').tapTarget('open');

  $("#new-collection-btn").on("click", function(event){
    $('.tap-target').tapTarget('open');
  });

}
