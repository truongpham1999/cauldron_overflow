/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import $ from 'jquery';

/*$(document).ready(function() {
    $('.js-vote-arrows').find('a').on('click', function(e) {
        e.preventDefault();
        var $link = $(e.currentTarget);

        $.ajax({
            url: '/comments/10/vote/'+$link.data('direction'),
            method: 'POST'
        }).then(function(response) {
            $('.js-vote-arrows').find('.js-vote-total').text(response.votes);
        });
    });
})
*/

$(document).ready(function() {
    $(".js-vote-arrows").find('a').on('click', function(e) {
        e.preventDefault();
        const link = $(e.currentTarget);

        $.ajax({
            url: '/comments/10/vote/'+link.data('direction'),
            method: 'POST'
        }).then(function(data) {
            $(".js-vote-arrows").find('.js-vote-total').text(data.votes);
        });
    });
})
