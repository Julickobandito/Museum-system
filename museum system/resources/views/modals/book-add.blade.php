<div class="modal fade addBook" wire:ignore.self id="addBook" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Зареєструвати новий том</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="save">
                <div class="modal-body">
                    <div class="md-3" style="margin-bottom: 12px;">
                        <label for="tom_name" class="form-label">Назва тому</label>
                        <input type="text" class="form-control" id="book_code" name="text" placeholder="Уведіть назву тому" wire:model="book_code" />
                    </div>
                    <div class="mb-3">
                        <label for="tom_description" class="form-label">Опис</label>
                        <textarea class="form-control" id="book_description" rows="4" placeholder="Уведіть опис тому" wire:model="book_description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-tertiary" data-dismiss="modal">Скасувати</button>
                    <button type="submit" class="btn-main">Зареєструвати</button>
                </div>
            </form>
        </div>
    </div>
</div>