/*

	PAGE DEFAULTS

*/
var loaderContent = document.querySelector('.loader').cloneNode(true);
var firstTimeVisitor = getCookie("firstTimeVisitor");
if (firstTimeVisitor == null) {
	loaderTimer = 3000;
	document.cookie = "firstTimeVisitor=false; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
} else {
	loaderTimer = 300;
}
removeLoader(loaderTimer);

var doFavRecipe = document.querySelectorAll(".do-fav-recipe");
for (var i = 0; i < doFavRecipe.length; i++) {
	doFavRecipe[i].addEventListener('click', function(e) {
		e.path[0].classList.toggle("active");
	});
}
/*

	SEARCH

*/
var searchString = "";
if (document.querySelector(".search-recipes") !== null) {
	document.querySelector(".search-recipes").addEventListener('keyup', function(e) {
		if (e.path[0].value !== searchString) {
			searchString = e.path[0].value.toLowerCase();
			var searchCount = 0;
			var recipes = document.querySelectorAll(".category.recipe");
			for (var i = 0; i < recipes.length; i++) {
				var title = recipes[i].querySelector("h4").textContent.toLowerCase();
				if (title.includes(searchString)) {
					recipes[i].classList.remove("hidden");
					searchCount++;
				} else {
					recipes[i].className += " hidden";
				}
			}
			document.querySelector("#search-count").innerHTML = searchCount;
		}
	});
}

/*

	LOGIN

*/
var pretendLoginBtns = document.querySelectorAll(".pretend-login-btn");
for (var i = 0; i < pretendLoginBtns.length; i++) {
	pretendLoginBtns[i].addEventListener('click', function(e) {
		var username = document.querySelector("input[name=username]").value;
		var password = document.querySelector("input[name=password]").value;
		if (username.length < 1) {
			document.querySelector("input[name=username]").className += " has-error";
			setTimeout(function(){
				document.querySelector("input[name=username]").classList.remove("has-error");
			}, 1000);
			return false;
		} else if (password.length < 1) {
			document.querySelector("input[name=password]").className += " has-error";
			setTimeout(function(){
				document.querySelector("input[name=password]").classList.remove("has-error");
			}, 1000);
			return false;
		} else {
			addLoader(loaderContent);
			document.cookie = "username="+ username +"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
			document.cookie = "logged_in=true; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
			location.reload();
		}
	});
}
var pretendPersonalizeBtns = document.querySelectorAll(".pretend-personalize-btn");
for (var i = 0; i < pretendPersonalizeBtns.length; i++) {
	pretendPersonalizeBtns[i].addEventListener('click', function(e) {
		addLoader(loaderContent);
		var preferences = document.querySelector('input[name=preferences]:checked').value;
		var allergies = document.querySelector("input[name=allergies]").value;
		document.cookie = "preferences="+ preferences +"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
		document.cookie = "allergies="+ allergies +"; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
		document.cookie = "personalized=true; expires=Thu, 18 Dec 2020 12:00:00 UTC; path=/";
		location.reload();
	});
}

/*

	FUNCTIONS

*/
function getCookie(cookie) {
    var dc = document.cookie;
    var prefix = cookie + "=";
    var start = dc.indexOf("; " + prefix);
    if (start == -1) {
        start = dc.indexOf(prefix);
        if (start != 0){
						return null;
				}
    } else {
        start += 2;
        var end = document.cookie.indexOf(";", start);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(start + prefix.length, end));
}
function removeLoader(loaderTimer) {
	setTimeout(function(){
	  document.querySelector('.loader').className += " loaded";
	  setTimeout(function(){
	    document.querySelector('.loader').remove();
	  }, 300);
	}, loaderTimer);
}
function addLoader(loaderContent) {
	document.querySelector('body').appendChild(loaderContent);
	setTimeout(function(){
		document.querySelector('.loader').classList.remove("loaded");
		setTimeout(function(){
			removeLoader(1500);
	  }, 10);
	}, 10);
}
