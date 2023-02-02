<?php

class SocialMedia
{
   public string $name;
}

final class Facebook extends SocialMedia
{
}

//error
class FakeFB extends SocialMedia
{
}
