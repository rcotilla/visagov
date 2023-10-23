
function bookModal(modal, url) {
    let fetch_status;
    fetch(url, {
        method: "GET",
        headers: {
            "Content-type": "application/json;charset=UTF-8"
        }
    })
        .then(function (response) {
            fetch_status = response.status;
            return response.json();
        })
        .then(function (json) {
            if (fetch_status == 200) {
                setBookFields(modal, json)
                new bootstrap.Modal(modal).show()
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

function getBookUrl(id) {
    return config.routes.getBook + '/' + id
}

function setBookFields(modal, book) {
    console.log(modal)
    const title = modal.getElementsByClassName('bookTitle')[0]
    const author = modal.getElementsByClassName('bookAuthor')[0]
    const id = modal.getElementsByClassName('bookId')[0]

    if (title.tagName === 'INPUT') {
        title.value = book.title
    } else {
        title.textContent = book.title
    }

    if (author.tagName === 'INPUT') {
        author.value = book.author
    } else {
        author.textContent = book.author
    }
    id.value = book.id
}

function showDeleteBookModal(id) {
    let modal = document.getElementById('deleteBookModal');
    bookModal(modal, getBookUrl(id))
}

function showEditBookModal(id) {
    let modal = document.getElementById('editBookModal');
    bookModal(modal, getBookUrl(id))
}