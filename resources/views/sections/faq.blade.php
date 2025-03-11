<div class="faq-section">
    <h1>Často kladené otázky</h1>
    <div class="faq_container">
        <div class="faq">
            <div class="faq_question">
                <div class="text">Aký je čas príchodu a odchodu?</div>
                <div class="faq_icon">
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
            <div class="faq_answer_container">
                <div class="faq_answer">Check-in je možný od 15:00 a check-out je potrebné vykonať do 11:00. Ak
                    potrebujete individuálny čas príchodu alebo odchodu, kontaktujte nás a pokúsime sa vám vyhovieť.
                </div>
            </div>
        </div>

        <div class="faq">
            <div class="faq_question">
                <div class="text">Môžem prísť so zvieratami?</div>
                <div class="faq_icon">
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
            <div class="faq_answer_container">
                <div class="faq_answer">Žiaľ, domáci miláčikovia majú pobyt zakázaný.</div>
            </div>
        </div>

        <div class="faq">
            <div class="faq_question">
                <div class="text">Má ubytovanie parkovacie miesto?</div>
                <div class="faq_icon">
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
            <div class="faq_answer_container">
                <div class="faq_answer">Áno, pre našich hostí je k dispozícii bezplatné parkovacie miesto priamo pri
                    ubytovaní.</div>
            </div>
        </div>

        <h2>Na všetky otázky radi odpovieme aj cez telefón</h2>
    </div>
</div>

<style>
    .faq-section {
        padding: 20px;
        background-color: #fff;
    }

    .faq-section h1 {
        font-size: 1.5rem;
        color: #B4D39C;;
        font-family: 'Karma', sans-serif;
        font-weight: 300;   
    }

    .faq-section h2 {
        font-size: 20px;
        color: #B4D39C;;
        font-family: 'Karma', sans-serif;
        font-weight: 300;  
        padding: 40px 20px;
        text-align: center; 
    }

    .faq {
        margin: 20px 0px;
        border: solid 1px #B4D39C;
        border-radius: 30px;
        padding: 10px;
    }

    .faq_question {
        display: inline-block;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Karma', sans-serif;
        font-weight: 300;
        font-size: 18px;
        color: #B4D39C;
        margin: 0 5px;
    }

    .faq_answer_container {
        padding-top: 10px;
        display: none;
        border-top: 1px solid #B4D39C;
        color: #B4D39C;
        font-family: 'Inter', sans-serif;
        font-weight: 300;
        font-size: 16px;
    }

    .faq_icon {
        font-size: 15px;
        color: #B4D39C;
    }

    .links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 30px;
        padding: 20px;
        font-family: 'Gotu', sans-serif;
        font-weight: 300;
        font-size: 20px;
        background-color: #B89080;
        border-radius: 50px;
        color: #fff;
    }
</style>

<script>
    $(document).ready(function () {
        // FAQ Toggle Logic
        $('.faq_question').click(function () {
            const $parentFaq = $(this).closest('.faq');
            const $faqIcon = $(this).find('.bi');

            if ($parentFaq.hasClass('open')) {
                // Close the current FAQ
                $parentFaq.find('.faq_answer_container').slideUp();
                $parentFaq.removeClass('open');
                $faqIcon.removeClass('bi-chevron-up').addClass('bi-chevron-down');
            } else {
                // Close all other FAQs
                $('.faq_answer_container').slideUp();
                $('.faq').removeClass('open');
                $('.faq .bi').removeClass('bi-chevron-up').addClass('bi-chevron-down');

                // Open the selected FAQ
                $parentFaq.find('.faq_answer_container').slideDown();
                $parentFaq.addClass('open');
                $faqIcon.removeClass('bi-chevron-down').addClass('bi-chevron-up');
            }
        });
    });
</script>
