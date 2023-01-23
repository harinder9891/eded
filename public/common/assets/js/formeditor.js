$(function(e) {
	$('#product_description').richText();
    $('#product_details').richText();
	$('#course_brief_description').richText();
	$('#syllabus_course_content').richText();
	$('#trainer_introduction').richText();
	$('#bootcamp_description').richText();
	$('#exam_information').richText();
	$('#benefits').richText()
	$('#course_faq_detail').richText()

	$('#description').richText();



	$('.content2').richText();
	$('.select2').select2({
		minimumResultsForSearch: Infinity
	});

	// Colored Hover
	$('#select2').select2({
		dropdownCssClass: 'hover-success',
		minimumResultsForSearch: Infinity // disabling search
	});
});
