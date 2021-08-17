<?php
ob_start();
?>

<section id="sales">
  <div class="content">
    <div class="sales">
      <div class="sales__header flexbox">
        <div class="select_section flexbox">
          <div class="select">
            <select name="sales" id="sales">
              <option value="product">Product sales</option>
              <option value="unit">Unit sold</option>
            </select>
          </div>

          <div class="select">
            <select name="date" id="date">
              <option value="last_seven">Last 7 days</option>
              <option value="last_month">Last 30 days</option>
              <option value="last_year">Last 12 months</option>
              <option value="this_week">This week</option>
              <option value="this_month">This month</option>
              <option value="year_o_date">Year to date</option>
            </select>
          </div>
        </div>

        <div class="contrast_section flexbox">
          <div class="revenue">
            <h3>Revenue</h3>

            <div class="flexbox">
              <?php include "blocks/sales/sales.php"; ?>
            </div>
          </div>

          <div class="up_down">
            <h3><span class="profit">Profit</span> / <span class="loss">Loss</span></h3>

            <div class="flexbox">
              <?php include "blocks/sales/sales.php"; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="sales__chart">
        <div class="chart">
          <?php include "blocks/sales/chart.php"; ?>
        </div>

        <div class="legend_chart flexbox">
          <p class="revenue_legend">- Revenue</p>

          <p class="profit_loss_legend">- Profit / Loss</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="summary">
  <div class="content">
    <h2>Summary</h2>

    <p>Last 30 days</p>

    <div class="summary">
      <div class="summary__custom">
        <?php include "blocks/summary/custom.php"; ?>
      </div>

      <div class="summary__filters">
        <?php include "blocks/summary/filters.php"; ?>

        <?php include "blocks/summary/filtered_table.php"; ?>
      </div>
    </div>
  </div>
</section>

<!-- Input Type NUMBER -->
<script>
  jQuery('<div class="number_nav"><div class="number_nav__button number_up"></div><div class="number_nav__button ' +
    'number_bottom"></div></div>').insertAfter('.number input');
  jQuery('.number').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.number_up'),
      btnDown = spinner.find('.number_bottom'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });

  function isright(obj)
  {
    if (obj.value>10) obj.value=10;
    if (obj.value<1) obj.value=1;
  }

</script>

<!-- Add 'active' class to hidden form -->
<script>
  $('.columns__select').click(function () {
    $('.columns__filters, .columns__select').toggleClass('active');
  });


  $('.jump__to p').click(function () {
    $('.jump__form, .jump__to p').toggleClass('active');
  });

  $(".filter_list__head p").on("click", function() {
    $(this).closest('.filter_list').toggleClass("active");
    return false;
  });

  $('.category_search .input_search__button').click(function () {
    $(this).closest('.input').toggleClass("active");
  });
</script>

<?php
$doc_body = ob_get_clean();
?>
