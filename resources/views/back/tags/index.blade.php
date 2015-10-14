@extends('back.layout.master')

@section('pageTitle', trans('back-tags.title'))

@section('content')
    <section>
        <div class="grid">
            <h1>{{ trans('back-tags.title') }}</h1>
            <a href="{{ URL::action('Back\TagController@create') }}" class="button">{{ trans('back-tags.new') }}</a>

            @foreach($tags as $name => $type)

                <h3>{{ trans("back-tags.types.{$name}") }}</h3>

                <table data-sortable="{{ URL::action('Back\TagController@changeOrder') }}">
                    <thead>
                    <tr>
                        <th></th>
                        <th data-orderable="false"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($type as $tag)

                        <tr data-row-id="{{ $tag->id }}" >
                            <td>
                                <a href="{{ Url::action('Back\TagController@edit', [$tag->id]) }}">{{ $tag->translate(content_locale())->name }}</a>
                            </td>
                            <td class="-right">
                                {!! HTML::formButton(URL::action('Back\TagController@destroy', [$tag->id]), '<span class="fa fa-remove"></span>', 'delete',
                                    [
                                        'class'=>'button -danger -small',
                                        'id'=> 'delete_tag_' . $tag->id
                                    ]
                                )!!}
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            @endforeach

        </div>
    </section>
@stop
