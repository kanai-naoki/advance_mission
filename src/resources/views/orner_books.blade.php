@extends('layouts.orner_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/orner_books.css') }}">
@endsection

@section('content')
<div class="orner_books_header_content_area">
    <h2 class="orner_books_header_content">予約情報一覧</h2>
</div>
<div class="orner_books_content">
    <div class="orner_book_lists_area">
        <table class="book_lists_table">      
            <tr class="book_lists_table_ttl_area">
                <th class="book_lists_table_ttl_first">
                    <p>Username</p>
                </th>
                <th class="book_lists_table_ttl">
                    <p>Shopname</p>
                </th>
                <th class="book_lists_table_ttl">
                    <p>Bookdate</p>
                </th>
                <th class="book_lists_table_ttl">
                    <p>Booktime</p>
                </th>
                <th class="book_lists_table_ttl">
                    <p>Number</p>
                </th>
                <th class="book_lists_table_ttl">
                    <p>その他</p>
                </th>
            </tr>
            @foreach ($book_lists as $book_list)
            <tr class="book_lists_table_txt_area">
                <td class="book_lists_table_user_name">
                    <p>{{ $book_list->name }}</p>                        
                </td>
                 <td class="book_lists_table_shop_name">
                    <p>{{ $book_list->shop_name }}</p>                        
                </td>
                <td class="book_lists_table_book_date">
                    <p>{{ $book_list->book_date }}</p>                        
                </td>
                <td class="book_lists_table_book_time">
                    <p>{{ $book_list->book_time }}</p>                        
                </td>
                <td class="book_lists_table_number">
                    <p>{{ $book_list->number }}</p>                        
                </td>
                <td class="book_lists_table_others">
                    {{-- <form class="book_lists_contact_form" action="/books_contact" method="post"> --}}
                    {{-- @csrf --}}
                        <input type="hidden" name="id" value="{{ $book_list->id }}">
                        <button class="book_lists_contact_button" type="submit">連絡する
                        </button>
                    {{-- </form> --}}
                    <form class="book_lists_delete_form" action="/books_delete" method="post">
                    @method('DELETE')
                    @csrf
                        <input type="hidden" name="id" value="{{ $book_list->id }}">
                        <button class="book_lists_delete_button" type="submit">削除する 
                        </button>
                    </form>                         
                </td>
            </tr>
            @endforeach       
        </table>     
    </div>          
</div>
@endsection