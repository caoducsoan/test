
<div class="container containersearch">
 	<div class="td-drop-down-search">
    <div id="searchbanner" class="searchbanner">
			<div class="tabsearch">
				<div class="findjobcourse findjob active">Tìm việc làm</div>
				<div class="findjobcourse searchcourse">Tìm khoá học</div>
			</div>
			<div class="tabseachinfor clearfix">
				<form id="formsearchinfo" action="<?php echo site_url('tat-ca-tin-tuyen-dung'); ?>" class="formsearchinfo clearfix" method="post">
					<span class="seachinfor seachinfor-one seachinforonetwobeta active">
						<select name="job_career" class="seachinfoslect seachinfoslectonefive seachinfoslect-one active" style="width: 100%;">
							<option value="">Chọn ngành nghề</option>
							<?php if(isset($data_search['job_career']) && !empty($data_search['job_career']))
              {
                foreach ($data_search['job_career'] as &$value) {
                  ?>
                  <option value="<?php echo $value->ID; ?>"><?php echo $value->name; ?></option>
                  <?php
                }
                unset($value);
              } ?>
						</select>
					</span>
					<span class="seachinfor seachinfoslectonefive seachinfor-five seachinforonetwobeta">
						<select name="course_category" class="seachinfoslect seachinfoslect-one active" style="width: 100%;" >
							<option value="">Chọn khóa học</option>
              <?php if(isset($data_search['course_category']) && !empty($data_search['course_category']))
              {
                foreach ($data_search['course_category'] as &$value) {
                  ?>
                  <option value="<?php echo $value->ID; ?>"><?php echo $value->namecategory; ?></option>
                  <?php
                }
                unset($value);
              } ?>
						</select>
					</span>
					<span class="seachinfor seachinfor-two seachinforonetwo" id="place_for_course" style="display:none">
						<select name="place" class="seachinfoslect" style="width: 100%;">
							<option value="">Chọn địa điểm</option>
              <?php if(isset($data_search['autocomplete']) && !empty($data_search['autocomplete']))
              {
                foreach ($data_search['autocomplete'] as $key => &$value) {
                  ?>
                  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                  <?php
                }
                unset($value,$key);
              } ?>
						</select>
					</span>
          <span class="seachinfor seachinfor-two seachinforonetwo" id="place_for_job" >
            <select name="job_place" class="seachinfoslect"  style="width: 100%;">
							<option value="">Chọn địa điểm</option>
              <?php if(isset($data_search['job_place']) && !empty($data_search['job_place']))
              {
                foreach ($data_search['job_place'] as &$value) {
                  ?>
                  <option value="<?php echo $value->ID; ?>"><?php echo $value->name; ?></option>
                  <?php
                }
                unset($value);
              } ?>
						</select>
          </span>
					<span class="seachinfor seachinfor-three">
						<input type="text" name="textsearch" class="textsearchinfo" value="" placeholder="Nhập vào từ khóa tìm kiếm">
					</span>
					<span class="seachinfor seachinfor-four">
						<i class="fas fa-search"><span>Tìm kiếm</span></i>
						<input type="submit" value="" >
					</span>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
  $(document).ready(function(){
    $('.findjob').click(function(){
      $('#place_for_job').show();
      $('#place_for_course').hide();
      $('.formsearchinfo').attr('action','<?php echo site_url('tat-ca-tin-tuyen-dung'); ?>')
    });
    $('.searchcourse').click(function(){
      $('#place_for_job').hide();
      $('#place_for_course').show();
      $('.formsearchinfo').attr('action','<?php echo site_url('khoa-hoc-tieng-anh'); ?>');
    });
  });
</script>
