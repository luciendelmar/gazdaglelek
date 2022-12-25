$(document).ready(function(){

    let numCards = 60
    let stack = []
    let spread = ''

        $(document).on('click', '.origo', function() {

            for (a=1; a<=numCards; a++) {
                stack.push(a)
            }
            stack.sort(() => Math.random() - 0.5);
            stack.forEach(id => {
                spread += "<div class='card' id='" + id + "'><img class='img2' src='img/logo.png'></div>"
            });
            $('.container').hide()
            $("#stack").html(spread);

        })

    let chosenId
    let result
    let herCards = []

    $(document).on('click', '.card', function() {

        chosenId = $(this).attr('id')
        herCards.push(chosenId)
        $('#' + chosenId).css("background-color","lightgray")
        $.post( "updCards.php", {cards: herCards}, function(resp, stat){
            result = JSON.parse(resp)
        })

    })


})