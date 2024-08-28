document.getElementById('add-book-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const ano = document.getElementById('ano').value;
    const genero = document.getElementById('genero').value;

    await fetch('/api/livros', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ titulo: title, autor: author, ano: ano, genero: genero })
    });
});

document.getElementById('update-book-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const bookId = document.getElementById('book-id').value;
    const newTitle = document.getElementById('new-title').value;
    const newAuthor = document.getElementById('new-author').value;
    const newAno = document.getElementById('new-ano').value;
    const newGenero = document.getElementById('new-genero').value;

    await fetch(`/api/livros/${bookId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ titulo: newTitle, autor: newAuthor, ano: newAno, genero: newGenero })
    });
});

document.getElementById('delete-book-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const bookId = document.getElementById('delete-id').value;

    await fetch(`/api/livros/${bookId}`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        }
    });
});
