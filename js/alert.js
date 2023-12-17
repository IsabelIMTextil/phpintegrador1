function alert(e) {
  e.preventDefault();

  Swal.fire({
    title: "Estas seguro que desea eliminar el registro?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar!",
    timer: 3000, // es ms (mili-segundos)
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: "Eliminado!",
        text: "Your file has been deleted.",
        icon: "success",
      });
    }
  });
}
