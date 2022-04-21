// to make toast

function makeToastr(type, message, heading,) {
    toastr[type](message, heading, {
        closeButton: true,
        tapToDismiss: false,
        progressBar: true,
    });
}

Livewire.on('toast', (type, message, heading) => {
    makeToastr(type, message, heading);
});