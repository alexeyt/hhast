<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<571d2ddd2bd61decf817adfba04ae2ee>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class DecoratedExpression extends EditableSyntax {

  private EditableSyntax $_decorator;
  private EditableSyntax $_expression;

  public function __construct(
    EditableSyntax $decorator,
    EditableSyntax $expression,
  ) {
    parent::__construct('decorated_expression');
    $this->_decorator = $decorator;
    $this->_expression = $expression;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $decorator = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['decorated_expression_decorator'],
      $position,
      $source,
    );
    $position += $decorator->width();
    $expression = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['decorated_expression_expression'],
      $position,
      $source,
    );
    $position += $expression->width();
    return new self($decorator, $expression);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'decorator' => $this->_decorator;
    yield 'expression' => $this->_expression;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $decorator = $this->_decorator->rewrite($rewriter, $parents);
    $expression = $this->_expression->rewrite($rewriter, $parents);
    if (
      $decorator === $this->_decorator &&
      $expression === $this->_expression
    ) {
      return $this;
    }
    return new self($decorator, $expression);
  }

  public function raw_decorator(): EditableSyntax {
    return $this->_decorator;
  }

  public function with_decorator(EditableSyntax $value): this {
    if ($value === $this->_decorator) {
      return $this;
    }
    return new self($value, $this->_expression);
  }

  public function hasDecorator(): bool {
    return !$this->_decorator->is_missing();
  }

  public function decorator(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_decorator);
  }

  public function raw_expression(): EditableSyntax {
    return $this->_expression;
  }

  public function with_expression(EditableSyntax $value): this {
    if ($value === $this->_expression) {
      return $this;
    }
    return new self($this->_decorator, $value);
  }

  public function hasExpression(): bool {
    return !$this->_expression->is_missing();
  }

  public function expression(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_expression);
  }
}