@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Avacean')
                <img src="{{ asset('admin/images/logo.png') }}" class="logo" alt="Avacean Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
