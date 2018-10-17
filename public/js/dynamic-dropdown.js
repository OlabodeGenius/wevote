$(function() {
	dynamicDropdown('/states', '#state');

	$('#state').change(function() {
		let url = `/lgas/${this.value}`;
		let target = '#lga';
		dynamicDropdown(url, target);
	});
});

function dynamicDropdown(url, selector) {
	$.get(url, function (data) {
		let $select = $(selector);
		
		$select.find('option').not(':first').remove();
		
		let options = [];
		$.each(data, function(index, item) {
			options.push(`<option value="${item.id}">${item.name}</option`);
		})
	$select.append(options)
	});
}