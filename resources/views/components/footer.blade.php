        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">

            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    <script type="text/javascript">
    window.onload = function(){
        $('#preloader').fadeOut(500);
        $('#main-wrapper').addClass('show');
        loop();
    };


    function loop(){
      console.log("loop");
      get_msgs();
      new_msgs();
      setTimeout(loop, 5000);
    }

    function get_msgs(){
      $.ajax({
          url: "/get_msgs/",
          type:"GET", 
          cache: false,
          success:function(response) {
            display(response);
            //console.log(response);
          },
          error:function(response) {
            console.log(response);
          },
        });
    }
    function new_msgs(){
      $.ajax({
          url: "/new_msgs/",
          type:"GET", 
          cache: false,
          success:function(response) {
            display1(response);
            },
          error:function(response) {
            console.log(response);
          },
        });
    }

    function display(msgs){
      var str ="";
      
      for (var i = 0; i < msgs.length; i++) {
        
        if(msgs[i].seen == 1){
            var color = 'style="opacity :  0.6; align-items : center;"';
        }else{
            var color = 'style="align-items : center;"';
        }
        if(msgs[i].demande_type == "paid"){
            var clss = '<span class="success"><i class="ti-shopping-cart"></i></span>';
        }else if(msgs[i].demande_type == "not"){
            var clss = '<span class="danger"><i class="ti-info-alt"></i></span>';
        }else{
            var clss = '<span class="primary"><i class="ti-user"></i></span>';
        }
        str +='<li class="media dropdown-item" '+color+'>'+
            clss+
            '<div class="media-body"><a href="/view_msg/'+msgs[i].id_message+'/'+msgs[i].demande_type+'">'+
            '<p style="text-wrap : balance"><strong>'+msgs[i].entreprise+'</strong><br>'+
            msgs[i].message_text+
            '</p></a></div>'+
        '</li>';    
     
        
      }
      document.getElementById('msgs').innerHTML = str;
    }
    function display1(val){
      var str =""; 
      if (val == 0){
        document.getElementById('new_msgs').style.display = "none";
      }else{
        document.getElementById('new_msgs').style.display = "block";
      }
      
    }
    
    </script>

    <script src="/vendor/global/global.min.js"></script>
    <script src="/js/quixnav-init.js"></script>
    <script src="/js/custom.min.js"></script>



    <!-- Owl Carousel -->
    <script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="/vendor/jquery.counterup/jquery.counterup.min.js"></script>




</body>

</html>