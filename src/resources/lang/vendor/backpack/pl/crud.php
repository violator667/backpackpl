<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    | Polish translation by Michał Zielonka-Majka <violator667@gmail.com>
    */

    // Forms
    'save_action_save_and_new' => 'Zapisz i dodaj nowy', //'Save and new item',
    'save_action_save_and_edit' => 'Zapisz i edytuj', //'Save and edit this item',
    'save_action_save_and_back' => 'Zapisz i wróć', //'Save and back',
    'save_action_changed_notification' => 'Domyślne zachowanie po zapisie zostało zmienione.', //'Default behaviour after saving has been changed.',

    // Create form
    'add'                 => 'Dodaj', //'Add',
    'back_to_all'         => 'Wróć do wszystkich ', //'Back to all ',
    //if we could change "'Back to all [somethig]" to "Back to listing" it won't make troubles in polish
    'cancel'              => 'Anuluj', //'Cancel',
    'add_a_new'           => 'Dodaj nowe ', //'Add a new ',
    //same here "Add a new [something]" to "Add new item"

    // Edit form
    'edit'                 => 'Edytuj', //'Edit',
    'save'                 => 'Zapisz', //'Save',

    // Revisions
    'revisions'            => 'Korekty',//'Revisions',
    'no_revisions'         => 'Nie znaleziono korekt',//'No revisions found',
    'created_this'         => 'utworzył',//'created this',
    'changed_the'          => 'zmienił',//'changed the',
    'restore_this_value'   => 'Przywróć tą wartość',//'Restore this value',
    'from'                 => 'Z',//'from',
    'to'                   => 'Na',//'to',
    'undo'                 => 'Cofnij',//'Undo',
    'revision_restored'    => 'Korekta została przywrócona poprawnie',//'Revision successfully restored',
    'guest_user'           => 'Gość',//'Guest User',

    // Translatable models
    'edit_translations' => 'EDYTUJ TŁUMACZENIA', //'EDIT TRANSLATIONS',
    'language'          => 'Język', //'Language',

    // CRUD table view
    'all'                       => 'Wszystkie ', //'All ',
    //same here "All [something]" to "All entries"
    'in_the_database'           => 'w bazie danych', //'in the database',
    'list'                      => 'Lista', //List
    'actions'                   => 'Akcje', //'Actions',
    'preview'                   => 'Podgląd', //'Preview',
    'delete'                    => 'Usuń', //'Delete',
    'admin'                     => 'Admin', //'Admin',
    'details_row'               => 'To jest wiersz szczegółów. Zmodyfikuj wedle uznania.', //'This is the details row. Modify as you please.',
    'details_row_loading_error' => 'Wystąpił błąd podczas ładowania szczegółów. Spróbuj ponownie.', //'There was an error loading the details. Please retry.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Czy jesteś pewien, że chcesz usunąć ten wpis?', //'Are you sure you want to delete this item?',
        'delete_confirmation_title'                   => 'Wpis usunięty', //'Item Deleted',
        'delete_confirmation_message'                 => 'Wybrany wpis został poprawnie usunięty.', //'The item has been deleted successfully.',
        'delete_confirmation_not_title'               => 'NIE usunięto', //'NOT deleted',
        'delete_confirmation_not_message'             => 'Wystąpił błąd. Wybrany wpis mógł nie zostać usunięty.', //"There's been an error. Your item might not have been deleted.",
        'delete_confirmation_not_deleted_title'       => 'Nie usunięto',//'Not deleted',
        'delete_confirmation_not_deleted_message'     => 'Nic się nie wydarzyło. Wybrany wpis jest bezpieczny.', //'Nothing happened. Your item is safe.'

         // Bulk actions
        'bulk_no_entries_selected_title' => 'Niczego nie wybrano',//'No entries selected',
        'bulk_no_entries_selected_message' => 'Wybierz przynajmniej jeden element.',//'Please select one or more items to perform a bulk action on them.',

        // Bulk confirmation
        'bulk_delete_are_you_sure' => 'Czy jesteś pewien, że chcesz usunąć :number rekordów?',//'Are you sure you want to delete these :number entries?',
        'bulk_delete_sucess_title' => 'Wybrane rekordy zostały usunięte',//'Entries deleted',
        'bulk_delete_sucess_message' => ' rekordy zostały usunięte',//' items have been deleted',
        'bulk_delete_error_title' => 'Usuwanie zakończone niepowodzeniem',//'Delete failed',
        'bulk_delete_error_message' => 'Jeden lub więcej rekordów nie mogło być usuniętych',//'One or more items could not be deleted',

        'ajax_error_title' => 'Błąd',//'Error',
        'ajax_error_text'  => 'Błąd podczas ładownia stony. Odśwież stronę.', //'Error loading page. Please refresh the page.',

        // DataTables translation
        'emptyTable'     => 'Brak dostępnych danych dla tabeli', //'No data available in table',
        'info'           => 'Wyświetlono _START_ do _END_ z _TOTAL_ wpisów', //'Showing _START_ to _END_ of _TOTAL_ entries',
        'infoEmpty'      => 'Wyświetlono 0 do 0 z 0 wpisów', //'Showing 0 to 0 of 0 entries',
        'infoFiltered'   => '(przyefiltrowano z _MAX_ wszystkich wpisów)', //'(filtered from _MAX_ total entries)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ wpisów na stronę', //'_MENU_ records per page',
        'loadingRecords' => 'Ładuję...', //'Loading...',
        'processing'     => 'Przetwarzam...', //'Processing...',
        'search'         => 'Szukaj: ',//'Search: ',
        'zeroRecords'    => 'Brak pasujących wpisów', //'No matching records found',
        'paginate'       => [
            'first'    => 'Pierwsza',//'First',
            'last'     => 'Ostatnia',//'Last',
            'next'     => 'Następna', //'Next',
            'previous' => 'Poprzednia', //'Previous',
        ],
        'aria' => [
            'sortAscending'  => 'aktywuj by sortować rosnąco',//': activate to sort column ascending',
            'sortDescending' => 'aktuwuj by sortować malejąco',//': activate to sort column descending',
        ],
        'export' => [
            'copy'              => 'Kopuj',//'Copy',
            'excel'             => 'Excel',
            'csv'               => 'CSV',
            'pdf'               => 'PDF',
            'print'             => 'Drukuj',//'Print',
            'column_visibility' => 'Widzialność rubryki',//'Column visibility',
        ],

    // global crud - errors
        'unauthorized_access' => 'Nieautoryzowany dostęp - nie masz wystarczających uprawnień by przeglądać tę stronę.',//'Unauthorized access - you do not have the necessary permissions to see this page.',
        'please_fix' => 'Proszę poprawić następujące błędy:',//'Please fix the following errors:',

    // global crud - success / error notification bubbles
        'insert_success' => 'Wpis został poprawnie dodany.',//'The item has been added successfully.',
        'update_success' => 'Wpis został poprawnie zmodyfikowany.',//'The item has been modified successfully.',

    // CRUD reorder view
        'reorder'                      => 'Zmień kolejność',//'Reorder',
        'reorder_text'                 => 'Przeciągnij i upuść by zmienić kolejność.',//'Use drag&drop to reorder.',
        'reorder_success_title'        => 'Wykonano',//'Done',
        'reorder_success_message'      => 'Wybrana kolejność została zachowana.',//'Your order has been saved.',
        'reorder_error_title'          => 'Błąd',//'Error',
        'reorder_error_message'        => 'Wybrana kolejność nie została zachowana.', //'Your order has not been saved.',

    // CRUD yes/no
        'yes' => 'Tak',//'Yes',
        'no' => 'Nie',//'No',

    // CRUD filters navbar view
        'filters' => 'Filtry',//'Filters',
        'toggle_filters' => 'Przełącz filtry',//'Toggle filters',
        'remove_filters' => 'Usuń filtry',//'Remove filters',

    // Fields
        'browse_uploads' => 'Przeglądaj upload',//'Browse uploads',
        'select_all' => 'Wybierz Wszystkie', //'Select All',
        'select_files' => 'Wybierz pliki',//'Select files',
        'select_file' => 'Wybierz plik',//'Select file',
        'clear' => 'Wyczyść',//'Clear',
        'page_link' => 'Link do strony',//'Page link',
        'page_link_placeholder' => 'http://example.com/twoja-zadana-strona',//'http://example.com/your-desired-page',
        'internal_link' => 'Link wewnętrzny',//'Internal link',
        'internal_link_placeholder' => 'Wewnętrzny slug. np. \'admin/strona\' (bez cydzysłowu) dla \':url\'',//'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'Link zewnętrzny',//'External link',
        'choose_file' => 'Wybierz plik',//'Choose file',

    //Table field
        'table_cant_add' => 'Nie można dodać nowego :entry',//'Cannot add new :entity',
        'table_max_reached' => 'Osiągnięto maksimum :max',//'Maximum number of :max reached',

    // File manager
    'file_manager' => 'Manadżer plików',//'File Manager',

    //Polish translation addons
    'records' => 'rekordy',
    'back_to_listing' => 'Wróć do listingu',
    'add_a_new_record' => 'dodaj nowy rekord do bazy danych',
];
