<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('../../head.html');?>
        <title>How monads work?</title>
    </head>
    <body>
    <article>
        <h1>How monads work?</h1>
        <p>Every newbie who has understood monads even a little bit wants to share it with the rest of the world, and I am no exception.</p>
        <h3>Monad typeclass</h3>
        <p>In the class Monad, 4 operators are implemented: <code>return</code>, <code>(>>=)</code>, <code>(>>)</code> and <code>fail</code>.</p>
<pre>
class Monad m where
  return :: a -> m a

  (>>=) :: m a -> (a -> m b) -> m b  -- bind

  x >> y = x >>= \_ -> y

  fail :: String -> m a
  fail s = error s
</pre>
    <p><code>(a -> m b)</code> — Kleisli arrow.</p>
    <h3>Example</h3>
    <p><b>Kleisli arrow</b></p>
    <p>Okay, let's now see an example of how bind works, because it is the main operator in the Monad class. All code is <span class="link remote"><a href="https://github.com/endygamedev/learn-haskell/blob/main/src/MonadExample.hs" target="blank_">here</a></span>.</p>
    <p>Suppose we have an <code>arrowf</code> function that takes some number that is a representative of the <code>Enum</code> and <code>Show</code> class and returns this number added by 1 and wraps it in a <code>String</code>, and then puts it into the <code>Just</code> container.</p>
<pre>
arrowf :: (Enum a, Show a) => a -> Maybe String
arrowf x = Just (show $ succ x)
</pre>
    <p>If we look at the type of this function, it will look like this: <code>(Enum a, Show a) => a -> Maybe String</code>. Now take another look at the type of the <code>(>>=)</code> function: <code>m a -> (a -> m b) -> m b</code>. If we remove that a is a representative of the <code>Enum</code> and <code>Show</code> classes, then it turns out that we have written a specific example of a Kleisli arrow: <code>(a -> m b)</code>, where <code>m = Maybe</code> and <code>b = String</code>.</p>
    <p>Usage example:</p>
<pre>
MonadExample> arrowf 3
Just "4"
</pre>
    <p><b>Bind function</b></p>
    <p>Okay, now let's move on to writing an example bind function.</p>
<pre>
monadBind :: Maybe a -> (a -> Maybe String) -> Maybe String
monadBind Nothing _ = Nothing
monadBind (Just x) f = f x
</pre>
    <p>The <code>monadBind</code> function is an exact example of the bind function when: <code>m = Maybe</code> and <code>b = String</code>.</p>
    <p>Usage example:</p>
<pre>
MonadExample> monadBind (Just 3) arrowf
Just "4"
</pre>
    <p>We can also use the <code>return</code> function:</p>
<pre>
MonadExample> monadBind (return 3) arrowf
Just "4"
</pre>
    <p>All other operators in the Monad class are fairly self-explanatory.</p>
    <h3>Code listing</h3>
<pre>
module MonadExample where

import Prelude


arrowf :: (Enum a, Show a) => a -> Maybe String
arrowf x = Just (show $ succ x)


monadBind :: Maybe a -> (a -> Maybe String) -> Maybe String
monadBind Nothing _ = Nothing
monadBind (Just x) f = f x
</pre>
    </article>
    <?php include('../../footer.html');?>
    </body>
</html>