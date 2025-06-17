<?php
  include('partials/header.php');
?>

<div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
          <?php
            $qna = new Qna();
            $qnaItems = $qna->index();

            foreach ($qnaItems as $item) {
            echo '<div class="accordion">';
            echo '<div class="question">' . $item['question'] . '</div>';
            echo '<div class="answer">' . $item['answer'] . '</div>';
            echo '</div>';
            }
          ?>
    
          </div>
        </div>
      </div>
    </div>

<?php
    include('partials/footer.php');
?>

