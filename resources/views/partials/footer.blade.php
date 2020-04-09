<div class="btn-group footer-buttons" role="group">
    <a type="button" class="btn {{ request()->path() == 'words' ? 'active' : '' }}" href="/words">Words</button>
    <a type="button" class="btn {{ request()->path() == 'theme' ? 'active' : '' }}" href="/theme">Theme</button>
    <a type="button" class="btn {{ request()->path() == 'coin' ? 'active' : '' }}" href="/coin">Coin</button>
    <a type="button" class="btn {{ request()->path() == 'dice' ? 'active' : '' }}" href="/dice">Dice</a>
</div>
