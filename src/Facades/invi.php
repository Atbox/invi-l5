<?php

namespace Atbox\Invi\Facades;

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2016 Atbox
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
 * AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    Invi
 * @version    0.8.13 l5
 * @author     Sajjad Rad [sajjad.273@gmail.com]
 * @license    MIT License (3-clause)
 * @copyright  (c) 2016
 * @link       http://atbox.io/pages/opensource
 */
 
use Illuminate\Support\Facades\Facade;
 
class Invi extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'invi'; }
 
}