var adm = {
	/* [LOADING BLOCK] */
	block : function(){
	// block() : block the page

    document.getElementById("page-loader").classList.add("active");
	},

	unblock : function(){
	// unblock() : unblock the page

		document.getElementById("page-loader").classList.remove("active");
	},

  /* [SIDE BAR] */
	side : function(){
	// side() : toggle side bar

    document.getElementById("page-sidebar").classList.toggle("active");
	},

  /* [AJAX] */
  ajax : function(opt){
  // ajax() : AJAX call

    /* AJAX OPTIONS --------------
     * url : target URL
     * data : data to send
     * ok : function to run on success
     * error : function to run on failure
     * debug : will console log response if set
    --------------------------------- */

    // FORM DATA
    var data = null;
    if (opt.data) {
      data = new FormData();
      for (let key in opt.data) {
        data.append(key, opt.data[key]);
      }
    }

    // XHR
    var xhr = new XMLHttpRequest();
    xhr.open('POST', opt.url, true);
    xhr.onload = function(){
      if (opt.debug) { console.log(this.response); }
      adm.unblock();
      if (this.response == "OK") {
        if (typeof opt.ok == "function") { opt.ok(this.response); }
      } else {
        if (typeof opt.error == "function") { 
          opt.error(this.response); 
        } else {
          alert("An error has occurred!");
        }
      }
    };
    adm.block();
    xhr.send(data);
  },

  load : function(opt){
  // load() : load contents into target container with AJAX

    /* LOAD OPTIONS --------------
     * url : target URL
     * data : data to send
     * target : target container
    --------------------------------- */

    // FORM DATA
    var data = null;
    if (opt.data) {
      data = new FormData();
      for (let key in opt.data) {
        data.append(key, opt.data[key]);
      }
    }

    // XHR
    var xhr = new XMLHttpRequest();
    xhr.open('POST', opt.url, true);
    xhr.onload = function(){
      document.getElementById(opt.target).innerHTML = this.response;
    };
    xhr.send(data);
  },

  /* [SIGN OFF] */
	bye : function(){
	// bye() : sign off user

    if (confirm("Sign off?")) {
      adm.ajax({
        url : "ajax-session.php",
        data : {
          req : "out"
        },
        ok : function(res){
          location.reload();
        }
      });
    }
	}
};