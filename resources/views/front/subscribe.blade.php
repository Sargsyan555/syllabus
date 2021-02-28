
<section id="service" class="pos-r o-hidden text-center">
    <div class="container">
        <div class="row subscribe-inner align-items-center">
            <div class="col-md-6 col-sm-12">
                <h4>Subscribe Our Newsletter</h4>
            </div>
            <div class="col-md-6 col-sm-12 sm-mt-2">
                <div class="subscribe-form">
                    <form id="mc-form" name="productForm" class="group">
                        <input type="email" value="" name="email" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input id="save_subscribe" class="btn border-0 btn-theme" type="submit" name="subscribe" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ==" crossorigin="anonymous" />

<script>
    $(document).ready(function() {
        $('#save_subscribe').click(function (e) {
            e.preventDefault();
            $.ajax({
                url: "/subscribes",
                data: {email:$('#mc-email').val()},
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    $.toast({
                        heading: 'Success',
                        text: 'You are subscribed successfully!',
                        position: 'top-right',
                        stack: false,
                        icon:'success'
                    });
                    $('#mc-email').val('')
                },
                error: function (err) {
                    $.toast({
                        heading: 'Error',
                        text: 'You are already subscribed',
                        position: 'top-right',
                        stack: false,
                        icon:'error'
                    });
                    $('#mc-email').val('')
                }
            });
        });
    });
</script>
