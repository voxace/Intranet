function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
    vars[key] = value;
  });
  return vars;
}

var cat = getUrlVars()["cat"];

switch(cat) {
    case "wifi":
        $("#wifi" ).trigger("click");
        break;
    case "byod-info":
        $("#byod-info" ).trigger("click");
        break;
    case "subject-info":
        $("#subject-info" ).trigger("click");
        break;
    case "subject-info-stg4":
        $("#subject-info" ).trigger("click");
        $("#subject-info-stg4" ).trigger("click");
        break;
    case "subject-info-stg5":
        $("#subject-info" ).trigger("click");
        $("#subject-info-stg5" ).trigger("click");
        break;
    case "subject-info-stg5-electives":
        $("#subject-info" ).trigger("click");
        $("#subject-info-stg5" ).trigger("click");
        $("#subject-info-stg5-electives" ).trigger("click");
        break;
    case "subject-info-stg6":
        $("#subject-info" ).trigger("click");
        $("#subject-info-stg6" ).trigger("click");
        break;
    case "rewards-system":
        $("#rewards-system" ).trigger("click");
        break;
    default:
        $("label:contains('Home')").css("font-weight", "bold" );
}

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

var page = getUrlVars()["page"];
$("a:contains('" + page + "')").css("text-shadow", "0px 0px 5px black" );
$("a:contains('" + page + "')").css("font-weight", "bold" );
