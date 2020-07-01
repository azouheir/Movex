function goSearch(event){
			 if (event.keyCode === 13) {
				 var id = event.target.value;
			        window.location.replace("search.php?id="+id);
			    }
		}