@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            <img src="{{ asset(setting()->site_logo) }}" class="logo" alt="Bruyenyard" style="width:100%;height:auto">
        </a>
    </td>
</tr>
