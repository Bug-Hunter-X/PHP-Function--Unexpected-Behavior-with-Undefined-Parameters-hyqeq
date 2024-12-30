function foo(a, b) {
  if (!isset($a) || !isset($b)) {
    return null; //Handle undefined values
  }
  return a + b;
}