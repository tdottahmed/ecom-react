@extends('backend.layouts.app')

@section('content')
  <div class="aiz-titlebar mb-3 mt-2 text-left">
    <div class="row align-items-center">
      <div class="col">
        <h1 class="h3">{{ translate('Custom Landing Pages') }}</h1>
      </div>
      <div class="col text-right">
        <a href="{{ route('custom-landing-pages.create') }}" class="btn btn-primary">
          <i class="las la-plus"></i> {{ translate('Add New') }}
        </a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <table class="aiz-table mb-0 table">
        <thead>
          <tr>
            <th>#</th>
            <th>{{ translate('Title') }}</th>
            <th>{{ translate('Url') }}</th>
            <th>{{ translate('Active') }}</th>
            <th class="text-right">{{ translate('Actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pages as $key => $page)
            <tr>
              <td>{{ $pages->firstItem() + $key }}</td>
              <td>{{ $page->title }}</td>
              <td>
                <a href="{{ $page->url }}" target="_blank">
                  {{ $page->url }}
                </a>
              </td>
              <td>
                @if ($page->is_active)
                  <span class="badge badge-soft-success px-4">{{ translate('Active') }}</span>
                @else
                  <span class="badge badge-soft-secondary px-4">{{ translate('Inactive') }}</span>
                @endif
              </td>
              <td class="text-right">
                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                   href="{{ route('custom-landing-pages.edit', $page->id) }}" title="{{ translate('Edit') }}">
                  <i class="las la-edit"></i>
                </a>
                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                   href="{{ route('custom-landing-pages.show', $page->id) }}" title="{{ translate('Preview') }}">
                  <i class="las la-eye"></i>
                </a>
                <form class="d-inline-block" action="{{ route('custom-landing-pages.destroy', $page->id) }}"
                      method="POST" onsubmit="return confirm('{{ translate('Are you sure?') }}')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-soft-danger btn-icon btn-circle btn-sm" type="submit"
                          title="{{ translate('Delete') }}">
                    <i class="las la-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-muted text-center">{{ translate('No pages found') }}</td>
            </tr>
          @endforelse
        </tbody>
      </table>

      <div class="aiz-pagination mt-3">
        {{ $pages->links() }}
      </div>
    </div>
  </div>
@endsection
