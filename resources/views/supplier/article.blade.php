@extends('supplier/default')

@section('content')

    @if ($articles->getCollection()->count() > 0)
        {{-- Model Listing --}}
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr style="font-weight:700">
                    <td>
                        Id
                    </td>
                    <td>
                        Content
                    </td>
                    <td class="text-center">
                        Edit
                    </td>
                    <td class="text-center">
                        Delete
                    </td>
                </tr>
                </thead>
                @foreach ($articles->getCollection() as $article)
                    <tr>
                        <td>
                            <h3>{{$article['id']}}</h3>
                        </td>
                        <td>
                            <a data-toggle="collapse" href="#collapse{{$article['id']}}" aria-expanded="false" aria-controls="collapse{{$article['id']}}"><h3>{!! $article['title'] !!}</h3></a>
                            <div class="collapse" id="collapse{{$article['id']}}">
                                {!! $article['content'] !!}
                            </div>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-default" href="<?php echo \URL::current(); echo '/edit/'.$article['id'] ?>">
                                <span class="glyphicon glyphicon-pencil" style="color:grey; font-weight:900;"></span>
                            </a>
                        </td>
                        <td class="text-center">
                            <form method="POST" action="{{\URL::current().'/'.$article['id']}}" accept-charset="UTF-8">
                                <input name="_method" type="hidden" value="DELETE">
                                <input name="page" type="hidden" value="{{ \Input::get('page') }}">
                                <input name="_token" type="hidden" value="{{csrf_token()}}">
                                <button type="submit" class="btn btn-default btn-delete" style="color:red; font-weight:900;">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- Pagination --}}
        <table>
            <tfoot>
            <tr>
                <td style="width:100%" class="text-center">
                    {!! $articles->render() !!}
                </td>
            </tr>
            </tfoot>
        </table>
    @endif

    <a href="{{\URL::current().'/create'}}" class="btn btn-primary">Write new article</a>
@stop