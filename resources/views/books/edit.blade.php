<div class="modal fade" id="editBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-floating" name="add-book" id="add-book" method="post" action="{{ url('update-book') }}">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('messages.books.edit_book') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bookTitle" id="title" name="title" placeholder="">
                        <label for="title">{{ __('messages.books.title') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bookAuthor" id="author" name="author" placeholder="">
                        <label for="author">{{ __('messages.books.author') }}</label>
                    </div>
                    <input type="hidden" name="id" class="bookId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.books.cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('messages.books.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
