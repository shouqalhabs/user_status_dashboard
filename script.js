function toggleStatus(id) {
    fetch(`toggle.php?id=${id}`, { method: 'POST' })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById(`status-${id}`).innerText = data.newStatus;
            } else {
                alert("Failed to toggle status.");
            }
        })
        .catch(err => alert("Error: " + err));
}
