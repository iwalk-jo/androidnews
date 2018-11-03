// Init App
var myApp = new Framework7({
	modalTitle: 'Framework7',
	// Enable Material theme
	pushState: true,
	material: true
});

// Expose Internal DOM library
var $$ = Dom7;

// Add main view
var mainView = myApp.addView('.view-main', {});


myApp.onPageInit('news', function (page) {
	//$$.getJSON('https://webhozz-training.com/berita_ave/apps/news.php',{par:'val'}, function(data){
	$$.getJSON('http://localhost:8080/androidnews/apps/get_news.php', {
		par: 'val'
	}, function (data) {
		$$.each(data, function (index, element) {
			$$("#tablePortal").find("tbody").append(
				'<tr>' +
				'<td>' +
				'<h2 align="left">' + element.title + '</h2>' +
				'</td>' +
				'</tr>' +
				'<tr>' +
				'<td>' +
				'<p align="justify">' + element.content + '</p>' +
				'</td>' +
				'</tr>' +
				'<tr>' +
				'<td>' + '<a href="news_detail.html?id=' + element.id_news + '">Read More</a>' + '</td>' +
				'</tr><hr>'

			)
		})
	})
});

myApp.onPageInit('news_detail', function (page) {
	//$$.getJSON('https://webhozz-training.com/berita_ave/apps/news.php',{id:page.query.id},function	(data){
	$$.getJSON('http://localhost:8080/androidnews/apps/get_detail.php', {
		id: page.query.id
	}, function (data) {
		$$.each(data, function (index, element) {
			$$("#tablePortaldetail").find("tbody").append(
				'<tr>' +
				'<td align="center">' +
				'<img src="../server/images/' + element.picture + '"width="100%>' +
				'</td>' +
				'</tr>' +
				'<tr>' +
				'<td>' +
				'<h2 align="left">' + element.title + '</h2>' +
				'</td>' +
				'<tr>' +
				'<td>' +
				'<p align="justify">' + element.content + '</p>' +
				'</td>' +
				'</tr>' +
				'<tr>'
			)

		})
	})
});
