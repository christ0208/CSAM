function saveFeedback(){
    let feedback = $('#feedback').val();
    window.location = "feedbackresult.php?feedback=" + feedback;
}

$('#btn-feedback').click(saveFeedback);