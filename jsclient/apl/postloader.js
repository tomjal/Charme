/*
Possible Errors:


Unexpeccted identifier by misplaced  comma:

var obj = {
   id: 23,
   name: "test",  <--
}



*/



// Call after login:
function apl_setup()
{
	// Load Lists
	// Load friends


}

function apl_postloader_check()
{
	// get the encrypted json from server, decrypt this json and store into html5 web storage
	

	// Give date of last post as argument and server returns missing posts...

	
}
function apl_postloader_getAll()
{
	// Return last 30 posts...
	var ret = {"items": [
	        {"time": 213123133, "postId": "123dlk2", "name": "Manuel", "userId": encodeURIComponent("manu@localhost"), "content": "Lorem ipsum lorem ipsum"},
	    	{"time": 213123133, "postId": "123dlk2", "name": "Test 2", "userId": encodeURIComponent("manu@localhost"), "content": "hahahahahaha"},
	    	{"time": 213123133, "postId": "123dlk2", "name": "Test", "userId": encodeURIComponent("manu@localhost"), "content": "hahahahahaha"}
	    ]
	};

	return ret;
}

var apl_postloader_lists =
 {"items": [
	        {"id": 213123133, "name": "listname"},
	    	{"id": 233, "name": "listname"},
	    	{"id": 2133133, "name": "listname"}
	    ]
	};

function apl_postloader_getLists()
{
	// Choose an unique identifier here "listitems"
	return apl_postloader_lists;


}