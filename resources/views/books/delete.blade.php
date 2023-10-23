<div class="modal fade" id="deleteBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-floating" name="del-book" id="del-book" method="post" action="{{ url('delete-book')}}">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('messages.books.delete_book') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ __('messages.books.delete_book_msg') }}<br />
                    {{ __('messages.books.book') }}: <span class="bookTitle"></span><br />
                    {{ __('messages.books.author') }}:  <span class="bookAuthor"></span><br />
                </div>
                <input type="hidden" name="id" class="bookId">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.books.cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('messages.books.delete') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
