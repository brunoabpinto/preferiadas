<div class="btn-group footer-buttons" role="group">
    <a type="button" class="btn {{ request()->path() == 'words' ? 'active' : '' }}" href="/words">words</button>
    <a type="button" class="btn {{ request()->path() == 'theme' ? 'active' : '' }}" href="/theme">theme</button>
    <a type="button" class="btn {{ request()->path() == 'coin' ? 'active' : '' }}" href="/coin">coin</button>
    <a type="button" class="btn {{ request()->path() == 'dice' ? 'active' : '' }}" href="/dice">dice</a>
</div>
