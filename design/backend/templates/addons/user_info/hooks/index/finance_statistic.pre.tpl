{if is_array($userSessionData) and count($userSessionData)}
<div class="dashboard-card">
    <div class="dashboard-card-title">{__("user_info.user_data")}</div>
    <div class="dashboard-card-content">
        <table class="user_info_table">
            {foreach $userSessionData as $name => $value}
                <tr>
                    <td class="uit_name">{$name}</td>
                    <td>{$value}</td>
                </tr>
            {/foreach}
        </table>
    </div>
</div>
{else}
    <p>{__("user_info.error")}</p>
{/if}
