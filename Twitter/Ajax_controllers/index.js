<script>
$("#b").click(function(){
  $.ajax({url: "http://localhost/Twitter/Controllers/ajax_tweets_loader.php", success: function(result){
    console.log(result);
  }})
});
</script>